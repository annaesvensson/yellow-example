# Example 0.9.1

Example feature for Datenstrom Yellow.

<p align="center"><img src="screenshot.png" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/annaesvensson/yellow-example/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to make animated text

Create a `[examplefeature]` shortcut with an optional text. 

## Examples

Content file with animated text:

    ---
    Title: Example page
    ---
    This is an example page with animated text.

    [examplefeature - Hello World]
    [examplefeature - printf("Hello World\n");]
    [examplefeature - alert("Hello World");]  

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
    tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.

Making animated text, different text:

    [examplefeature - We <3 people who code.]
    [examplefeature - This is an example text.]
    [examplefeature - This is an especially long example text.]  

Making animated text, inside a list:

    Datenstrom Yellow is for people who make small websites.
    
    * [examplefeature - Fun to use]
    * [examplefeature - Installed in a few minutes]
    * [examplefeature - Just files and folders]

## Developer

Your name. [Get help](https://datenstrom.se/yellow/help/).
