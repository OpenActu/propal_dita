Feature: Execution of a path from an starting point to  targeting point

  Scenario: The truck execute a path

    When I receive a tracking message
    And There is no bill attached to the path
    Then The tracking status received should be PATH_EMPTY

    When The conductor starts the path
    And There is no bill attached to the path
    Then The conductor should be change the tracking status to PATH_EMPTY

  Scenario: The customer service's entering a new bill

    When It's forgetting the origin path or target path
    Then An error information must be sent
    And The saving is refused
