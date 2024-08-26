# phpunit-demo

A demo project to explain PHPUnit.

## Introduction

This project is designed to demonstrate the usage of PHPUnit for testing PHP applications. It includes examples of basic test cases, assertions, and test suites.

## Requirements

- PHP 7.3 or higher
- Composer

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/phpunit-demo.git
   ```

---

**Table: PHPUnit Command-Line Options**

| Option                 | Description                                                        | Example                             |
| ---------------------- | ------------------------------------------------------------------ | ----------------------------------- |
| `--filter`             | Runs tests that match the provided filter pattern.                 | `phpunit --filter testMethodName`   |
| `--group`              | Runs tests from the specified group(s).                            | `phpunit --group groupName`         |
| `--testdox`            | Prints the test names and their statuses in a readable format.     | `phpunit --testdox`                 |
| `--coverage-text`      | Generates a text-based code coverage report.                       | `phpunit --coverage-text`           |
| `--coverage-html`      | Generates an HTML code coverage report in the specified directory. | `phpunit --coverage-html coverage/` |
| `--configuration` (-c) | Specifies a PHPUnit XML configuration file to use.                 | `phpunit -c phpunit.xml`            |
| `--log-junit`          | Logs test execution in JUnit XML format.                           | `phpunit --log-junit log.xml`       |
| `--bootstrap`          | Specifies a PHP script to include before running tests.            | `phpunit --bootstrap bootstrap.php` |
| `--colors`             | Adds color to the output for better readability.                   | `phpunit --colors`                  |
| `--debug`              | Displays debugging information during test execution.              | `phpunit --debug`                   |
| `--stop-on-failure`    | Stops the test execution upon the first failure.                   | `phpunit --stop-on-failure`         |
| `--test-suffix`        | Only executes test files with the specified suffix.                | `phpunit --test-suffix=Test.php`    |

---

**Visuals:**

- Add icons or graphics related to coding and command-line tools to make the slide visually appealing.
- Use different colors to highlight the command options and their descriptions.

---

Below is a table that outlines the key differences between mocks and stubs:

| **Aspect**           | **Mocks**                                                                                                                                                       | **Stubs**                                                                                                                 |
| -------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| **Definition**       | Mocks are objects that can set expectations on method calls and verify them. They simulate behavior and ensure the methods are called with specified arguments. | Stubs are objects that provide predefined responses to method calls, typically used to provide fixed behavior in tests.   |
| **Purpose**          | Used to test behavior, ensuring that specific methods are called as expected during the test.                                                                   | Used to provide controlled, fixed responses in tests, usually to isolate the unit under test from external dependencies.  |
| **Verification**     | Mocks verify that methods are called with specific parameters and in a specific order.                                                                          | Stubs do not verify method calls; they only return predetermined values when methods are invoked.                         |
| **Test Type**        | Used in behavior-driven testing (BDT) to ensure correct interactions between objects.                                                                           | Used in state-based testing to ensure the state of the object under test is correct after the interaction.                |
| **Complexity**       | Generally more complex as they involve setting up expectations and verifying behavior.                                                                          | Simpler than mocks, as they focus on returning data rather than validating interactions.                                  |
| **Failure Handling** | Test fails if the mock's expectations (like method calls) are not met.                                                                                          | Stubs do not cause test failures directly; they only provide responses. Any failure is due to the assertions in the test. |
| **Example Usage**    | Ensuring a method is called with specific arguments. Example: Verifying that an email service’s `sendEmail` method is called with the correct parameters.       | Providing a fixed return value. Example: Returning a predefined user object when a database query is made.                |

This table highlights the primary differences between mocks and stubs, focusing on their usage, purpose, and verification process in unit testing.
