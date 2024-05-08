# Quiz App

This app is a study project aimed at developing a tool for a local college to streamline the initial filtering of applicants. It helps save time by identifying applicants who meet the basic requirements, reducing the need for time-consuming one-on-one sessions with those who do not meet these requirements at an early stage.

The purpose of this file is to follow a friend's advice to design software with a focus on structuring all underlying concepts before diving into implementation. By doing so, I aim to save time by avoiding unforeseen pitfalls.

# Users

- Applicants
- Teacher

# Scope

This small project is designed to help a junior developer understand the entire scope of the software development process. It also showcases my approach to solving problems that arise with the development of any solution.

My main focus will be backend development. The frontend is just there to make it useful for the local college to use, so for simplicity's sake I will use Blade and responsive templates I find online.

I will however focus on clean code, TDD, and the best development practices known to me at the moment.

I plan to deploy it in a server when all the features are developed.

Frontend wireframe is availble in this repo as a pdf in the root folder.

# Database

![](/quiz-app-db.drawio.png)


# TDD

- **Smoke Test**: A basic test to check if the app is functioning at a high level, ensuring no critical failures.
- **Form Validation**: Tests to verify that form inputs meet the required rules and constraints.
- **Authentication**: Tests to ensure users can log in and log out correctly.
- **Authorization**: Tests to confirm that users have the appropriate access to resources based on their roles.
- **Re-directs**: Tests to ensure the app redirects users to the correct pages or URLs under specific conditions.
- **End-to-End Tests**: These simulate real-world scenarios to ensure the entire system functions as intended. They typically involve user flows and interactions with the app.
- **Database Tests**: Tests to ensure database interactions work correctly, covering CRUD (Create, Read, Update, Delete) operations.
- **Error Handling Tests**: Tests to verify that the app handles errors gracefully, with proper messaging and recovery mechanisms.
- **Security Tests**: These tests focus on the app's security, checking for vulnerabilities like SQL injection, cross-site scripting (XSS), and others.

# Basic flows

![](/quiz-app-flows.drawio.png)

# Tech-Stack

- Laravel
- MySQL
- PHPunit
- Linux
- Blade
- Bootstrap


# Requirements engineering

### User Stories
- **Definition**: User stories are short, simple descriptions of a feature or requirement told from the perspective of an end-user. They typically follow the format: "As a [type of user], I want [some action], so that [some outcome]."
- **Purpose**: User stories capture user needs in a simple and straightforward manner, focusing on what the user wants to achieve and why.
- **Creating User Stories**:
  - Identify the types of users (personas) who will interact with your software.
  - Talk to stakeholders, customers, or end-users to understand their needs.
  - Write user stories based on these discussions. For example:
    - "As a student, I want to submit assignments online, so that I don't have to bring physical copies."
    - "As a customer, I want to track my order, so that I know when it will be delivered."
- **Refining User Stories**:
  - Break down large user stories into smaller, manageable tasks.
  - Define acceptance criteria to clarify the expected outcome for each story.
  - Prioritize user stories based on business goals and user needs.

### Use Cases
- **Definition**: Use cases are detailed scenarios that describe how users interact with the system to achieve specific goals. They often include a step-by-step sequence of actions.
- **Purpose**: Use cases help to map out user interactions with the software, providing a more detailed view of user requirements and system behavior.
- **Creating Use Cases**:
  - Define the actors (users or systems) involved in the interaction.
  - Describe the goal or purpose of the use case.
  - Outline the main scenario or flow, detailing the steps involved.
  - Include variations or alternate flows to cover edge cases or exceptions.
- **Example**:
  - Use Case: "Add a Product to Cart"
    - Actor: Customer
    - Goal: Add a product to the shopping cart
    - Steps:
      1. Customer navigates to the product page.
      2. Customer clicks "Add to Cart."
      3. The product is added to the shopping cart.
    - Alternate Flows:
      - If the product is out of stock, show an appropriate message.
      - If the customer is not logged in, prompt them to log in or register.


# Use cases

## Login to app

- Actor: Applicants & Teacher
- Goal: Login to admin panel or to take test dashboard.
- Steps:
    1. Go to the quiz-app URL
    1. Actor enters credentials
    1. Actor logs in
- Alternate flows:
    - If the credentials are wrong, a message is displayed, or any validation specifications for that matter.
    - If the actor is an applicant, forward to take test dashboard.
    - If the actor is a teacher, take them to admin panel.
    - If the applicant has already taken the test forward to login screen

> One Attempt only

## Take the Quiz

- Actor: Applicants
- Goal: Answer the questions defined by the teacher to see if he/she continues to the next application filter.
- Steps: 
    1. Login
    1. Click on take test 
    1. The timer starts in the background
    1. Applicants answer the multiple choice questions before the timer ends.
- Alternate flows:
    - The timer ends and the answers are automatically sent to the server
    - Applicant finishes answering the questions before the timer ends and sends them by clicking on the button
    - Applicant leaves the app, closes window or action of some sort

> Timer
> Alert when quiz is not fully filled and applicant clicks send button


## Grade the test

## Quiz Creator

## Result list Read

> Highlight passed applications
> Show date and time when quiz was taken

## Applicant creation

> Automatic safe password generation

## Design database

## Create database

## Find responsive blade tempplates

## Make proyect run locally

## Call Laravel API with Laravel's HTTP client not web routes

## Apply security measures implemented by Laravel out of the box

## Deploy proyect





---


## Disclaimer


> Signup will not be implemented due to the use of a Mailer feature, which is out of scope for this proyect. The applicant is created with its email and the app generates a safe password for the Teacher. The credentials are later sent to the applicant's email manually. (Loosely based on cPanel's email account generator).
>
> This also means that the Teacher is created first via the DB to then utilize the app's GUI for its intended use.

### I understand that this app can be significantly improved, but to demonstrate my skills for job hunting, I chose to go with this design.

# API mindset implementation

- Inputs & Outputs
- Implementation

# Why?

> Programming is asking questions.
  