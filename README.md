# Xchange

### A simple foreign currency exchange calculator

Xchange is a small PHP web application which allows you to convert from one specified currency 
to another. It can be a nice tool for people that deal with multiple foreign currencies.

The currency-conversion process depends highly on the relative **exchange rates** between the 
two currencies. Different entities (banks, forex bureaus, online forex services, etc...) have 
each got their own relative exchange rates between the various currencies they deal with. 
Because of this, Xchange has been designed to be installed on your own (or company's) server in 
order to take advantage of custom exchange rates. This means that you can specify your own 
exchange rates, for the different currencies, once the application has been installed on your 
server.

This application has been built using plain (custom) PHP, no frameworks. 

The project is meant to give a deeper understanding of how foreign currencies work 
behind-the-scenes. It is also meant to test the OOP concepts of PHP.

## Installation
- Download the Xchange source code
- Copy the code to your web server's *Document Root*
- Open a web browser
- Go to *http://your-server/Xchange/*
- Proceed to the Xchange Web Installer
- Complete the installation process (the installation guide will help you)
- Enjoy Xchange :)

## License
This application has been released under the [MIT License](http://choosealicense.org). Feel 
free to modify or distribute the code as you wish.

## Development Principle
Progressive Enhancement (Start with a Niche)

## To-Do

[*] Setup base (initial) code  
[*] Un-Design a single HTML page as MVP*  
[] Add simple styling to page  
[*] Bootstrap the application dependencies  
[] Build the database schema  
[] Write the App Models (classes)   
[] Write the Calculator system*  
[] Write the Web installer*  
[] Implement server security strategies for PHP  
[] Upload to Github @meridianlabz  
[] Publish blog post about OOPHP

---

## What Have I Learnt About Object-Oriented PHP? 

### Fundamental Concepts 
- Object-Oriented Programming uses real-world objects, and their interactions to model 
complex software systems.
- An **Object** in OOP is anything, tangible or intangible, existing in the world.
- A **Class** is a prototype/model of a real-world Object, as understood by a computer.
- Just like a real-world object, a class can have both *properties* and *behaviour*.
- *Properties* are the different characteristics of an Object. For example, a 
"Person" (object) can have green eye-colour, 1m height, 70kg weight (properties).
- *Behaviour* refers to the different actions that can be done by an Object. In a Class,
behaviours are represented as *Functions*.

### Encapsulation
- A **Namespace** contains (encapsulates) **Classes**.
- A **Class** contains (encapsulates) *properties* and *functions*.
- A **Namespace** can be represented as a folder (directory) in your project containing 
related PHP Class files. 

### Inheritence
- A **Class** can inherit (re-use) both the *properties* and *functions* of another Class 
in an application.
- *Public* properties and functions can be executed by any other Class in the application.
- *Private* properties and functions can only be inherited by. 
- *Protected* properties and functions cannot be inherited by any other Class.