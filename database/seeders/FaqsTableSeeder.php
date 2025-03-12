<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    private array $data = [
        [
            'id' => 1,
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => 'There are 2 options available: Web-print and Mobility Print. With Web print, you can print but not plot from all devices. With Mobility print, you can print and plot from all devices. Plotting is only possible with a Windows or Apple laptop. Other devices are not possible. 1.0 Printing documents (Web print): Open the following link in your browser: https://hz.mynetpay.nl/. Log in with your HZ username and password. Tab Web print. At Step 1: Select a printer, check the settings (format, single/double sided etc.). Click in the field at Step 2: Select files to choose your files (you can also drag and drop). Click on Upload files now. Your file has now been sent to the appropriate printer. Use your HZ card at the printer to print the document. 2.0 Plotting and printing documents (Mobility print). 2.1 Installing Mobility Print: In your browser, open the following link: https://hz.mynetpay.nl/content/printdeploy/driverprint.html. Tap the desired operating system (the file will now be downloaded). Run the downloaded file and follow the instructions. Tab Sign in to install. Enter your HZ username and password and click Sign in to install. The HZ printer and plotter are now installed and selectable in the different software. 2.2 Printing: In the desired application, choose print/print and select the HZ_Printer. When the print command is given, log on to the printer by entering your HZ card or username/password. On the printer, press Print Release. After printing, press the following symbol on the printer to log off. 2.3 Plotting: First save your document (Autocad, Word, Powerpoint, etc.) in PDF format and open it in Adobe Acrobat (Reader). This application is on all HZ desktops and laptops. The advantage of a PDF file, is that what you see on the screen is also printed that way. Unlike, for example, Microsoft Word, which allows a file to open differently on each computer. Open the document (preferably in Adobe Acrobat). Click on File > Print.... Select the HZ_Plotter [HZ-University](Mobility) and then click Properties. Go to the Paper/Quality tab and select the desired size. Go to the Color tab and check Print in color if you want to plot in color. Click on OK. Under Page Sizing & Handling, select Fit if the image may be enlarged to the size of the paper. Click on Print. When the print job is done, log in to the printer using your HZ card or username/password. Press Print Release on the printer. After plotting, press the following symbol on the printer to sign out.',
        ],
        [
            'id' => 2,
            'question' => 'How can you scan a document and send it to your laptop at HZ?',
            'answer' => 'Scanning to a private/external mailbox is not possible. Please do not change the scanner setting. Log on to the printer using your HZ card or by entering your HZ user name & password. Choose the Scan option in the menu. Place the original(s) on the feeder or glass plate. Double-sided scanning (optional): Press Change settings. For duplex mode, select the 2-sided option. Press Start. After scanning, press the symbol on the printer to log off.',
        ],
        [
            'id' => 3,
            'question' => 'How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?',
            'answer' => 'Click on Order at the desired item to add it to your shopping cart. Repeat this for all desired items and click on Shopping cart in the menu on the left when done. Check your order and select Payment through Study store. You are forwarded to the Study store where you will be required to create a user account In order to be able to complete the purchase. It is important that you do not use your HZ password!',
        ],
        [
            'id' => 4,
            'question' => 'How can you book a project space?',
            'answer' => 'Go to the home page of the Self Service Portal. Click on Reservations. Choose the appropriate category and search for the "resource" you want to reserve. If necessary, use the Type filter to turn certain items on/off in the overview. Select the day when the resource is borrowed. By dragging the left mouse button, indicate the time period when the resource is borrowed. Click Next. Read the loan conditions, check the reservation and click Next. Fill in the necessary information and click Submit request.',
        ],
        [
            'id' => 5,
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'It is not possible to park directly at the HZ on Het Groene Woud. There is 1 special parking space available on the grounds for people with disabilities and/or chronic conditions. The car park on Kousteensedijk has a number of spaces for visitors, staff and students of Het Groene Woud. This car park is an 8-minute walk from the HZ. Upon showing your entry card, you can then get an exit card at the JRCZ service desk.',
        ]
    ];
    public function run(): void
    {
        foreach ($this->data as $item) {
            FAQ::create($item);
        }
    }
}
