# README - Helena Spencer

For this assignment, I chose to develop a personal portfolio. My main goals were to showcase a few of my recent projects and provide information about myself to the viewer. I'll go into more detail below.

## LINKS

[Website](https://helena-spencer.web.app)

[GitHub](https://github.com/hspencer10/hspencer_portfolio)

[Figma](https://www.figma.com/file/bTvDey07Uf0kVUlJWXovup/HW7?node-id=0%3A1)

## Description

The purpose of my website is to display the work/projects I have done in school as well as allow the viewer to get to know me a bit. I intentionally made it so that the project cards on the "Projects" page are not clickable just because I did not have time to implement a details page for each individual project. The information conveyed on my website is a summary ("Home") page which has my most recent work, an "About" page which goes into my three areas of life such as being a student, athlete, and my interests, and then my "Projects" page which has the relevant projects that I have done thus far. My website is engaging because it uses fun animations and bright colors. I also tried to keep the amount of content on the screen to a minimal so it wouldn't overwhelm the viewer. The target audience is for anyone who wants to learn more about me and what projects I have done, but primarily, potential recruiters and employers.

## Usage of Website

- All pages
  - Navigation bar
    - At the top of every page is a navigation bar with the different pages. If you scroll down at all, the navigation bar turns into a hamburger menu located at the top right of the screen.
- Home Page
  - Hello! header
    - Underneath the background picture, there is a header that says "Hello!" and if you hover over the word, it grows.
  - Learn More button
    - Scroll past the main background picture to the "Learn More" button and click on it. You should then be redirected to the "About" page.
  - Recent Work carousel
    - At the bottom of the Home page, there is a carousel displaying my recent projects. To see different projects, click on the arrows to the left and right of the images.
- About page
  - Hoverable columns
    - In the *Athlete* section, if you hover over any of the images/text, the image for that column turns from grayscale to colored, the header for the trait turns red, and the text changes weight slightly.
- Projects page
  - Filterable cards
    - The projects cards are filterable. If you click on the "All", "Applications", or "Websites" buttons, the corresponding projects are displayed.
- Contact page
  - Submitable form
    - The form on this page is able to be filled out and submitted. The user is then sent an email with a copy of their responses.
  - Social links
    - The links on the right hand side of the page under "Links" are able to be clicked and then the viewer is taken to the corresponding URL. Also, to communicate that the links are clickable, an animated line is displayed on hover.

## External Libraries

I used primarily **Bootstrap v 5.0** throught my various pages which I chose to use because it came with detailed documentation and it was very easy to use. The parts of my pages I chose to use Bootstrap with are the buttons, carousels, cards, and navigation bar. This library adds interactivity to my website as well as making formating more consistent. The other library I used was **FormSubmit** which was only for allowing the form on the "Contact" page to be submitable, adding a level of interactivity for the user by allowing them to connect with me directly through the website.

## Iteration from HW7

I was able to develop my website very similarily to my hi-fi prototype in Figma but I did make some changes. First, I added an infinitely scrolling header with my name to the "Home" page so the viewer knew my right away. Secondly, I intentionally chose to leave out the footer at the end of each page because the information that I was going to have there was slightly redundant and I felt it wasn't worth the time spent to add it. Lastly, a more smaller change I made was to leave out the red-circles on the "Home" page on top of my picture because I felt they didn't fit with the theme but am considering adding text there in the future.


## Major Challenges

I ran into many challenges while developing this website. One problem was determining how to have the form on the "Contact" page be able to be submitted but after hours of researching it and getting help from the TA I was pointed to FormSubmit which worked. Another problem was figuring out how to get the timing and view of the scrolling header on the "Home" page accurate which took a lot of iterating. I also had trouble being able to get the project cards on the "Projects" page to be filterable. Lastly, I wanted to implement more animations but I was running into errors with adding an ::after attribute to the element selectors because it would add a large amount of space to the end of the page so I took the animation out.

