Initial Idea & Problem:
 01. MR-X is has a bakery.
 02. Currently he manually try to track his business using tally khata, but it is not
     accurate and also kills his time.
 03. He needs to solution that he can track his sales.
 04. From system data he can decide the right/wrong and enhance his business.

Basic Requirement:
 01. Should have product category listing.
 02. Should have product listing.
 03. Sales & invoice features.
 04. Business report features.
 05. System should be multi-user, that many business can use it by creating profile.

 _______________________________________________________________________________________

AGILE - - Project Management Approach

PHASE 01:
 01. Planning User Profile table.
 02. User Profile Auth Back-End Development.
 03. User Profile Front-End Development.

 Developing User Auth Back-End Features
  01. User registration (end point)
  02. User login & issue JWT token (end point)
  03. Sending OTP Code to E-mail - Password Recover Stage 01 (end point)
  04. Verify OTP Code - Password Recover Stage 02 (end point)
  05. Allow user to reset password - Password Recover Stage 03 (end point)
  06. Allow user to get profile details (end point)
  07. Allow user to update profile details (end point)


PHASE 02:
  01. Planning Product Category Table By Profile
  02. Category Managing Back-End Development
  03. Category Managing Front-End Development  


  *Category-Controller:
    - Category Page
    - Category List
    - Category Create
    - Category By ID
    - Category Update
    - Category Delete