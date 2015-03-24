Feature: Web pages

  Scenario: Guziec afrykański
    Given I am on homepage
    When I follow "Guziec"
    Then I should see "guziec"