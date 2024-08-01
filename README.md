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

| Option               | Description                                                               | Example                                               |
|----------------------|---------------------------------------------------------------------------|-------------------------------------------------------|
| `--filter`           | Runs tests that match the provided filter pattern.                        | `phpunit --filter testMethodName`                     |
| `--group`            | Runs tests from the specified group(s).                                   | `phpunit --group groupName`                           |
| `--testdox`          | Prints the test names and their statuses in a readable format.            | `phpunit --testdox`                                   |
| `--coverage-text`    | Generates a text-based code coverage report.                              | `phpunit --coverage-text`                             |
| `--coverage-html`    | Generates an HTML code coverage report in the specified directory.        | `phpunit --coverage-html coverage/`                   |
| `--configuration` (-c) | Specifies a PHPUnit XML configuration file to use.                       | `phpunit -c phpunit.xml`                              |
| `--log-junit`        | Logs test execution in JUnit XML format.                                  | `phpunit --log-junit log.xml`                         |
| `--bootstrap`        | Specifies a PHP script to include before running tests.                   | `phpunit --bootstrap bootstrap.php`                   |
| `--colors`           | Adds color to the output for better readability.                          | `phpunit --colors`                                    |
| `--debug`            | Displays debugging information during test execution.                     | `phpunit --debug`                                     |
| `--stop-on-failure`  | Stops the test execution upon the first failure.                          | `phpunit --stop-on-failure`                           |
| `--test-suffix`      | Only executes test files with the specified suffix.                       | `phpunit --test-suffix=Test.php`                      |

---

**Visuals:**
- Add icons or graphics related to coding and command-line tools to make the slide visually appealing.
- Use different colors to highlight the command options and their descriptions.

---
