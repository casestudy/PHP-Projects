 Feature:  Login
 	In order to Login to your Moodle installation or System
 	As an authentified user, then
 	I need to enter my username and password.
 	
 Scenario: Login into Moodle Installation
 	Given I'm on the Welcome page of my moodle installation
 	And I've clik on the button found on the top right conner of my screen or on the foot of my screen
 	And I'm able to see the Username and Password field,
 	When I enter my "username" and "password" in the respective fields,
 	Then I should see another page which says "Available Courses".
 	But If my "username" and/or "password" is wrong,
 	Then I should see "invalid Login, please try again"
 	
 Scenario: Password Recovery
 	Given I'm on the Welcome page of my moodle
 	And I've clik on the button found on the top right conner of my screen
 	And I'm able to see the Username and Password field,
 	When I enter my "username" and "password" in the respective fields,
 	And For some reasons im unable to login to my account,
 	When I click the Forgotten username or password Button found just below my Login button
 	Then I should see two search bars one would be Search by "username" and the other will be Search by "email"
 	When I enter either my "username" or "email" address,
 	And The Protect Usernames check box in site policies of my moodle installation is unchecked,
 	Then I should see a message which says: An email has been sent to your address at *****@server.com.
 	When The Protect Usernames of my moodle installation is checked,
 	Then I should see a message which says: If you supplied a correct username or email address then an email should have been sent to you.
