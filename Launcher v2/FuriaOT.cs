using System;
using System.ComponentModel;
using System.Diagnostics;
using System.Drawing;
using System.IO;
using System.Net;
using System.Runtime.InteropServices;
using System.Windows.Forms;
using System.Xml.Linq;
using Ionic.Zip;

namespace Launcher_v2
{
    public partial class FuriaOT : Form
    {

        public const int WM_NCLBUTTONDOWN = 0xA1;
        public const int HT_CAPTION = 0x2;
        private int totalFiles;
        private int filesExtracted;
        private String versao;
        private String link_discord = "https://discord.gg/q59Hx4Q";
        private String link_facebook = "https://www.facebook.com/furiaot";
        private String link_whats = "https://chat.whatsapp.com/DRHNRf1A0bDG361hnLii9X";
        private String link_github = "https://github.com/Yokaito";
       

        [DllImportAttribute("user32.dll")]
        public static extern int SendMessage(IntPtr hWnd,
                         int Msg, int wParam, int lParam);
        [DllImportAttribute("user32.dll")]
        public static extern bool ReleaseCapture();

        public FuriaOT()
        {            
            InitializeComponent();
            SetStyle(ControlStyles.SupportsTransparentBackColor, true);

            this.Text = "Olimpia Launcher";
            //Download progress
            backgroundWorker1.RunWorkerAsync();
            strtGameBtn.Enabled = false;
            strtGameBtn.Visible = false;

            // Evento do Mouse (Entra e Sair)
            strtGameBtn.MouseEnter += new EventHandler(strtGameBtn_MouseEnter);
            strtGameBtn.MouseLeave += new EventHandler(strtGameBtn_MouseLeave);

        }

        //Makes the form dragable
        private void Form1_MouseDown(object sender,
        System.Windows.Forms.MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                ReleaseCapture();
                SendMessage(Handle, WM_NCLBUTTONDOWN, HT_CAPTION, 0);
            }
        }

        // Mouse entra em cima do btn
        void strtGameBtn_MouseEnter(object sender, EventArgs e)
        {
            this.strtGameBtn.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.start_ot_hover));
        }

        // Mouse sai de cima do btn
        void strtGameBtn_MouseLeave(object sender, EventArgs e)
        {
            this.strtGameBtn.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.start_ot));
        }

        //Close Button
        private void closeBtn_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void closeBtn_MouseEnter(object sender, EventArgs e)
        {
            closeBtn.BackgroundImage = Properties.Resources.close2;
        }

        private void closeBtn_MouseLeave(object sender, EventArgs e)
        {
            closeBtn.BackgroundImage = Properties.Resources.close1;
        }

        //Minimize Button
        private void minimizeBtn_Click(object sender, EventArgs e)
        {
            this.WindowState = FormWindowState.Minimized;
        }

        private void minimizeBtn_MouseEnter(object sender, EventArgs e)
        {
            minimizeBtn.BackgroundImage = Properties.Resources.minimize2;
        }

        private void minimizeBtn_MouseLeave(object sender, EventArgs e)
        {
            minimizeBtn.BackgroundImage = Properties.Resources.minimize1;
        }

        //Delete File
        static bool deleteFile(string f)
        {
            try
            {
                File.Delete(f);
                return true;
            }
            catch (IOException)
            {
                return false;
            }
        }
        

        //background Worker: Handles downloading the updates
        private void backgroundWorker1_DoWork(object sender, DoWorkEventArgs e)
        {
            // Variavel Unzip porcentagem            

            //Defines the server's update directory
            string Server = "https://furiaot.com/updates/";

            //Defines application root
            string Root = AppDomain.CurrentDomain.BaseDirectory;

            //Make sure version file exists
            FileStream fs = null;
            if(!File.Exists("version"))
            {
                using (fs = File.Create("version"))
                {

                }

                using (StreamWriter sw = new StreamWriter("version"))
                {
                    sw.Write("1.0");
                }
            }
            //checks client version
            string lclVersion;
            using (StreamReader reader = new StreamReader("version"))
            {
                lclVersion = reader.ReadLine();
            }
            decimal localVersion = decimal.Parse(lclVersion);


            //server's list of updates
            XDocument serverXml = XDocument.Load(@Server+"Updates.xml");

            //The Update Process
            foreach (XElement update in serverXml.Descendants("update"))
            {
                string version = update.Element("version").Value;
                string file = update.Element("file").Value;
                versao = version;

                decimal serverVersion = decimal.Parse(version);


                string sUrlToReadFileFrom = Server + file;

                string sFilePathToWriteFileTo = Root + file;

                if (serverVersion > localVersion)
                {
                    Uri url = new Uri(sUrlToReadFileFrom);
                    System.Net.HttpWebRequest request = (System.Net.HttpWebRequest)System.Net.WebRequest.Create(url);
                    System.Net.HttpWebResponse response = (System.Net.HttpWebResponse)request.GetResponse();
                    response.Close();

                    Int64 iSize = response.ContentLength;

                    Int64 iRunningByteTotal = 0;

                    using (System.Net.WebClient client = new System.Net.WebClient())
                    {
                        using (System.IO.Stream streamRemote = client.OpenRead(new Uri(sUrlToReadFileFrom)))
                        {
                            using (Stream streamLocal = new FileStream(sFilePathToWriteFileTo, FileMode.Create, FileAccess.Write, FileShare.None))
                            {
                                int iByteSize = 0;
                                byte[] byteBuffer = new byte[iSize];
                                while ((iByteSize = streamRemote.Read(byteBuffer, 0, byteBuffer.Length)) > 0)
                                {
                                    streamLocal.Write(byteBuffer, 0, iByteSize);
                                    iRunningByteTotal += iByteSize;

                                    double dIndex = (double)(iRunningByteTotal);
                                    double dTotal = (double)byteBuffer.Length;
                                    double dProgressPercentage = (dIndex / dTotal);
                                    int iProgressPercentage = (int)(dProgressPercentage * 100);

                                    backgroundWorker1.ReportProgress(iProgressPercentage);
                                }

                                streamLocal.Close();
                            }

                            streamRemote.Close();
                        }
                    }

                    //unzip
                    using (ZipFile zip = ZipFile.Read(file))
                    {
                        totalFiles = zip.Count;
                        filesExtracted = 0;
                        zip.ExtractProgress += ZipExtractProgress;
                        foreach (ZipEntry zipFiles in zip)
                        {                                                                                
                            zipFiles.Extract(Root + "", true);
                        }
                    }


                    //download new version file
                    WebClient webClient = new WebClient();
                    webClient.DownloadFile(Server+"version.txt", @Root+"version");

                    //Delete Zip File
                    deleteFile(file);                    
                }
            }
        }

        private void backgroundWorker1_ProgressChanged(object sender, ProgressChangedEventArgs e)
        {
            progressBar1.Value = e.ProgressPercentage;
            strtGameBtn.Visible = false;
            strtGameBtn.Enabled = false;

            downloadLbl.Text = "Baixando "+(e.ProgressPercentage).ToString()+"%";
        }

        private void backgroundWorker1_RunWorkerCompleted(object sender, RunWorkerCompletedEventArgs e)
        {            
            strtGameBtn.Visible = true;
            progressBar1.Visible = false;
            strtGameBtn.Enabled = true;
            downloadLbl.Text = "Cliente Atualizado";
            textVersion.Text = versao;
        }

        // Porcentagem UnZip
        private void ZipExtractProgress(Object sender, ExtractProgressEventArgs e){
            if (e.EventType != ZipProgressEventType.Extracting_BeforeExtractEntry)
                return;
            filesExtracted++;
            strtGameBtn.Visible = false;
            strtGameBtn.Enabled = false;
            int porcentagem = 100 * filesExtracted / totalFiles;
            progressBar1.Value = porcentagem; 
            downloadLbl.Text = "Extraindo "+(porcentagem).ToString()+"%";
        }


        //Starts the game
        private void strtGameBtn_Click(object sender, EventArgs e)
        {
            /*
            string App = "olimpia2.exe";
            string Folder = ".\\cliente/";
            Process.Start(App, Folder);
            System.Diagnostics.Process.Start(System.Windows.Forms.Application.StartupPath + "\furia.txt");*/
            System.Diagnostics.Process.Start(".\\cliente/bin/furia.exe");
            this.Close();
        }

        

        private void patchNotes_DocumentCompleted(object sender, WebBrowserDocumentCompletedEventArgs e)
        {

        }

        private void PictureBox2_Click(object sender, EventArgs e)
        {
            
        }        

        private void PictureBox3_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start(link_facebook);
        }

        private void PictureBox3_MouseEnter(object sender, EventArgs e)
        {
            this.pictureBox3.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.frame_facebook_hoover));
        }

        private void PictureBox3_MouseLeave(object sender, EventArgs e)
        {
            this.pictureBox3.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.frame_facebook));
        }

        private void PictureBox2_Click_1(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start(link_whats);
        }

        private void PictureBox2_MouseEnter(object sender, EventArgs e)
        {
            this.pictureBox2.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.frame_whats_hover));
        }

        private void PictureBox2_MouseLeave(object sender, EventArgs e)
        {
            this.pictureBox2.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.frame_whats));
        }

        private void PictureBox4_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start(link_github);
        }

        private void PictureBox4_MouseEnter(object sender, EventArgs e)
        {
            this.pictureBox4.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.frame_github_hover));
        }

        private void PictureBox4_MouseLeave(object sender, EventArgs e)
        {
            this.pictureBox4.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.frame_github));
        }

        private void PictureBox5_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start(link_discord);
        }

        private void PictureBox5_MouseEnter(object sender, EventArgs e)
        {
            this.pictureBox5.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.link_discord_hover));
        }

        private void PictureBox5_MouseLeave(object sender, EventArgs e)
        {
            this.pictureBox5.BackgroundImage = ((System.Drawing.Image)(Properties.Resources.link_discord));
        }
    }
}
