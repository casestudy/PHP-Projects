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
    	echo "This is the home page";
    }

    /**
     * @Given I've clik on the button found on the top right conner of my screen or on the foot of my screen
     */
    public function iVeClikOnTheButtonFoundOnTheTopRightConnerOfMyScreenOrOnTheFootOfMyScreen()
    {
    	echo "Welcome to the login page";
    }

    /**
     * @Given I'm able to see the Username and Password field,
     */
    public function iMAbleToSeeTheUsernameAndPasswordField()
    {
    	echo "Enter your username and password" ;
    }

    /**
     * @When I enter my :arg1 and :arg2 in the respective fields,
     */
    public function iEnterMyAndInTheRespectiveFields($arg1, $arg2)
    {
    	/*If im using active records, i will do */
    	echo "I will perform my database check here to be sure the user do exist and include the successpage if the return value is true";
    }

    /**
     * @Then I should see another page which says :arg1.
     */
    public function iShouldSeeAnotherPageWhichSays($arg1)
    {
    	echo $arg1 ;
    }

    /**
     * @Then If my :arg1 and\/or :arg2 is wrong,
     */
    public function ifMyAndOrIsWrong($arg1, $arg2)
    {
   
    	echo "Incorrect username or password, please try again" ;
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
    	echo $arg1 ;
    }

    /**
     * @Given I'm on the Welcome page of my moodle
     */
    public function iMOnTheWelcomePageOfMyMoodle()
    {
    	echo "This is the home page";
    }

    /**
     * @Given I've clik on the button found on the top right conner of my screen
     */
    public function iVeClikOnTheButtonFoundOnTheTopRightConnerOfMyScreen()
    {
    	echo "Welcome to the login screen";
    }

    /**
     * @When For some reasons im unable to login to my account,
     */
    public function forSomeReasonsImUnableToLoginToMyAccount()
    {
    	echo "Click the button below to retrieve your password";
    }

    /**
     * @When I click the Forgotten username or password Button found just below my Login button
     */
    public function iClickTheForgottenUsernameOrPasswordButtonFoundJustBelowMyLoginButton()
    {
    	echo "Enter your username or email to retrieve your details" ;
    }

    /**
     * @Then I should see two search bars one would be Search by :arg1 and the other will be Search by :arg2
     */
    public function iShouldSeeTwoSearchBarsOneWouldBeSearchByAndTheOtherWillBeSearchBy($arg1, $arg2)
    {
    	echo "Search by ".$arg1 ;
    	echo "\nor\n";
    	echo "Search by ".$arg2 ;
    }

    /**
     * @When I enter either my :arg1 or :arg2 addres correctly,
     */
    public function iEnterEitherMyOrAddresCorrectly($arg1, $arg2)
    {
        echo "It means that your ".$arg1." and ".$arg2." are correct" ;
    }

    /**
     * @Then I should a messages which says an :arg1.
     */
    public function iShouldAMessagesWhichSaysAn($arg1)
    {
    	echo "Shows you the available courses" ;
    }

    /**
     * @When I enter a wrong :arg1 or :arg2,
     */
    public function iEnterAWrongOr($arg1, $arg2)
    {
    	echo "It means that your ".$arg1." and/or ".$arg2." is wrong" ;
    }

    /**
     * @Then I should see a message which says :arg1
     */
    public function iShouldSeeAMessageWhichSays($arg1)
    {
    	echo $arg1 ;
    }

}
