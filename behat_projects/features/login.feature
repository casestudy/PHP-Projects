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
 	When I enter either my "username" or "email" addres correctly,
 	Then I should a messages which says an "password confirmation change sent to the email I entered".
 	When I enter a wrong "username" or "email",
 	Then I should see a message which says "Error sending password change confirmation email"
