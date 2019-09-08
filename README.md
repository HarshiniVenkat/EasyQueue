# SYNDinnovate
## EasyQueue
An Automated Queue Management System.

**Adyar and AshokNagar are the two branches we have considered for the prototype.** 

**Note**: Please keep all the files in your computer xamp folder --> htdocs--> *keep it here*.
Make sure you have started your XAMP Apache server. All the data is stored and manipulated in Firebase Database.
IR sensor is used. The IR readings are viewed from ThingSpeak application.

**Files Included in the Folders:**

1)*index.html*  : This page opens the registration form once the user scans the QR code provided. He then fills the necessary details. Once he clicks the submit button, he will receive an SMS indicating his token number and Estimated waiting time.


2)*sms.php*     : This page uses way2sms API to send an sms to the customer's entered mobile number.


3)*empD.html*   : This page is for the Employee . Here, the employee calls a customer by pressing the 'Call Next' button. He also sends an sms to the Customer pressing the 'Send SMS' button. Once he is done with the Customer queries, he finishes off by clicking the 'Finish' button. 
It then calculates the total time spent by the customer at the bank. The average branch turnaround time is also simultaneously updated.


4)*contersms.php*: This page is used by the Employee to send an SMS to the customer indicating the counter he has to go to. It uses way2sms API.

5)*tindi.php*    : Sends an SMS to the customer indicating counter allocations soon(within a few minutes).

6)*tover.php*    : Sends an SMS to the customer indicating the counter waiting time has elapsed.

7)*sensor.html*  : Used to obtain values from ThingSpeak and store the result in Firebase database.


8)*rank_card.html*: Branch wise ranking based on Total turnaround time at a particular branch. The results are displayed.

