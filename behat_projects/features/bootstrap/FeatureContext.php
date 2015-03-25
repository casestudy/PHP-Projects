<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    
    /**
     * @Given I'm on the Welcome page of my moodle installation
     */
    public function iMOnTheWelcomePageOfMyMoodleInstallation()
    {
    	echo "You are not logged in at the top right conner of my screen just below my browser's search bar \n" ;
        echo "Full Site name of the top left conner of my screen \n" ;
        echo "Front Page Summary on the top right conner of my screen \n" ;
        
    }

    /**
     * @Given I've clik on the button found on the top right conner of my screen or on the foot of my screen
     */
    public function iVeClikOnTheButtonFoundOnTheTopRightConnerOfMyScreenOrOnTheFootOfMyScreen()
    {
        echo "Log in" ;
        echo "\n" ;
        echo "Username ". "<input type='text'/>" ;
        echo "\n" ;
        echo "Password ". "<input type='password'/>" ;
    }

    /**
     * @Given I'm able to see the Username and Password field,
     */
    public function iMAbleToSeeTheUsernameAndPasswordField()
    {
        echo " " ;
    }

    /**
     * @When I enter my :arg1 and :arg2 in the respective fields,
     */
    public function iEnterMyAndInTheRespectiveFields($arg1, $arg2)
    {
        echo $arg1." ".$arg2 ;
    }

    /**
     * @Then I should see another page which says :arg1.
     */
    public function iShouldSeeAnotherPageWhichSays($arg1)
    {
    	echo "You are not logged in at the top right conner of my screen just below my browser's search bar \n " ;
      	echo "Full Site name of the top left conner of my screen \n" ;
        echo "Front Page Summary on the top right conner of my screen \n" ;
        echo $arg1." just to the right of the Full site name \n";
        echo "Navigation just below the Full site name \n" ;
        echo "Administration just below the Navigation \n" ;
        echo "Calender just below the Front Page summary \n" ;
    }

    /**
     * @Then If my :arg1 and\/or :arg2 is wrong,
     */
    public function ifMyAndOrIsWrong($arg1, $arg2)
    {
        echo "" ;
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        echo "Invalid login, please try again" ;
    }

    /**
     * @Given I'm on the Welcome page of my moodle
     */
    public function iMOnTheWelcomePageOfMyMoodle()
    {
        echo "You are not logged in at the top right conner of my screen just below my browser's search bar \n" ;
        echo "Full Site name of the top left conner of my screen \n" ;
        echo "Front Page Summary on the top right conner of my screen \n" ;
    }

    /**
     * @Given I've clik on the button found on the top right conner of my screen
     */
    public function iVeClikOnTheButtonFoundOnTheTopRightConnerOfMyScreen()
    {
        echo "Log in \n" ;
        echo "Username ". "<input type='text'/>" ;
        echo "\n" ;
        echo "Password ". "<input type='password'/>" ;
    }

    /**
     * @When I enter my username and password in the respective fields,
     */
    public function iEnterMyUsernameAndPasswordInTheRespectiveFields($arg1 , $arg2)
    {
       echo $arg1." ".$arg2;
    }

    /**
     * @When For some reasons im unable to login to my account,
     */
    public function forSomeReasonsImUnableToLoginToMyAccount()
    {
        echo " ";
    }

    /**
     * @When I click the Forgotten username or password Button found just below my Login button
     */
    public function iClickTheForgottenUsernameOrPasswordButtonFoundJustBelowMyLoginButton()
    {
        echo "To reset your password, submit your username or your email address below. If we can find you in the database, an email will be sent to your email address, with instructions how to get access again.";
    }

    /**
     * @Then I should see two search bars one would be Search by :arg1 and the other will be Search by :arg2
     */
    public function iShouldSeeTwoSearchBarsOneWouldBeSearchByAndTheOtherWillBeSearchBy($arg1, $arg2)
    {
        echo "Search by ".$arg1 ;
        echo "\n" ;
        echo $arg1." <input type='text'/>" ;
        echo "\n";
        echo "Search by ".$arg2 ;
        echo "\n" ;
        echo $arg2." <input type='email'/>" ;
    }

    /**
     * @When I enter either my :arg1 or :arg2 address,
     */
    public function iEnterEitherMyOrAddress($arg1, $arg2)
    {
        echo $arg1." ".$arg2 ;
    }

    /**
     * @When The Protect Usernames check box in site policies of my moodle installation is unchecked,
     */
    public function theProtectUsernamesCheckBoxInSitePoliciesOfMyMoodleInstallationIsUnchecked()
    {
        echo " " ;
    }

    /**
     * @Then I should see a message which says: An email has been sent to your address at *****@server.com.
     */
    public function iShouldSeeAMessageWhichSaysAnEmailHasBeenSentToYourAddressAtServerCom()
    {
        echo "An email has been send to your address ar *****@server.com" ;
    }

    /**
     * @When The Protect Usernames of my moodle installation is checked,
     */
    public function theProtectUsernamesOfMyMoodleInstallationIsChecked()
    {
        echo " " ;
    }

    /**
     * @Then I should see a message which says: If you supplied a correct username or email address then an email should have been sent to you.
     */
    public function iShouldSeeAMessageWhichSaysIfYouSuppliedACorrectUsernameOrEmailAddressThenAnEmailShouldHaveBeenSentToYou()
    {
       echo "if you supplied a correct username or email address, then an email should have been sent to you" ;
    }

    
}
