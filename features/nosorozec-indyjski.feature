Feature: Web pages

  Scenario: Nosorożec indyjski
    Given I am on homepage
    When I follow "Nosorożec Indyjski"
    Then I should see "gatunek nosorożca o długości ciała dochodzącej do 4 m"