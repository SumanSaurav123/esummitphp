# Landing Page for E-SUMMIT 2019

## Dahsboard 
When the users login or signup successfully we need to redirect them to a dashboard where other important procedures will be
taken care of like Payments, Profile, Choosing sessions. Etc.
The files are avaiable in esummit-dash

### NOTE : 
1.You can only use elements that are available in this template. Font, design etc. should be similar in all the pages. 
If you need something from google or any other template then ensure that the design is similar and if it is not then
do not add it.

2. Try not to edit the css or js files . If you need to add something to css or js files then do it internally (i.e. add css/js in your own files and DO NOT TOUCH THE MAIN CSS/JS)



## Job Roles
---
### 1. Payal Gaurav

    ```
        User Profile Page
        =================
        It is a simple form which would have the following fileds : 
        (Mehtod=POST)
        Fullname (value : name,type: text)
        Primary Email (value : main_email, type: email)
        Roll no (value: roll, type: text)
        Mobile No. (value: mob_no, type: text)
        What's App Mobile No. (value: w_mob_no, type: text)
        University {
                    value: uni, 
                    type: dropdown,
                    value: 'kiit university' or 'others' (if others then take input of college: use js to check that)
                    }
        if(KIIT)    //Use js to make this check
        KIIT Email : (value: alt_email, value: email)
        else
        Altenrnate Email: (value: alt_email, value: email)
        Year: (value: year, type: dropdown(1,2,3,4,others))
        Gender: (vaule: gender, type: radio(M,F,O))

        Startups
        ==============================================
        This will be another form similar to (https://ecell.org.in/startup-register). 

    ```

### 2. Kush
    ```
        Payments Page
        =============
        This will be page showing the users bill and a paynow button, use a card view prefeably. (check components)

        # Note : You will have to make three such cards.
    ```

### 3. Mayank
    ```
        Choose Events
        =============
        Here four cards will be shown, two for each day. The user gets to select only one session per day.

        Consider this to be a stylish form, with card view radio button.(check componets, if not google)
    ```
### 4. Somesh Manna
    ```
        Dashboard
        ==========
        1. Show a progress bar (That is out 3 steps (profile completeion, payments, events chosen) how many steps have they completed)
        You would've seen such bars on fb, linkdin. (Check componets, it is available there)

        2. Show qr code here. In a nice card view

        3. The dashboard button on the navbar (will be a dropdown having divisions as Your schedule for Day1, Day2, Day3)

            This Day 1, Day2 , Day 3 division will show the entire iteneary that the user needs to follow. Consider using
            a timeline view for this.

        4. Add sweetalert to all the pages
        
        5. Also remove all the backlinks from a the pags (to be done at last and remove unnecessary stuff from the template)

        Startups
        =====================================
        This is completely different and easy...

        Simply show the itenary for 3 days (Event being only one IMPS)


    ```
### 5. Arohan
    ```
        Forgot Password
        ===============
        This is page which will look very similar to login and signup pages. But it will show only on filed i.e for email.
        Here, you also need to make anothe page which will contain 2 fileds (New Password, Confirm New Password)
        
        Mail Verify Page
        ================
        Very simple just show a message here saying your email was verified (with button linking to Login and SIngup pages)
    ```
### 6. Sourabh
    ```
        Admin Panel
        ===========
        1. Form to create other admins: 
            (Mehtod POST)
        the form would require the following fields : 
            ->email (value: email, type: email)
            ->password (value: password, type: password)
        
        2. Two Table to show all registered Users and Startup
            This page should render a table with the following headers
            ->name
            ->email
            ->mobile no.
            ->what's app mobile no.
            ->ispaid
            ->instamojo id
            ->university
            -> sessions chosen
        
        3. A page to show to submit qr code
            This will contain a field that would input some text that is generated from scannig the qr code of user
            
            And upon sccessfull submission user profile data will be rendered(in a card view). (Will be done via. Ajax)
    ```


# FOR ANY QUERIES CONTACT ME.




    


