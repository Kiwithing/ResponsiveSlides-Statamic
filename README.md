Responsive Slides v0.0.1
============================
*Last Updated May 21, 2014*

This Statamic plugin allows you to insert a responsive slideshow into posts, pages, and templates. The slideshows run on http://responsiveslides.com/ juice.

##REQUIREMENTS
jQuery version 1.6 and up. [ResponsiveSlides.js](https://github.com/viljamis/ResponsiveSlides.js) version 1.54 is already included in this plugin.

## How To Install
Download the zip or clone this repo.

Just make sure the contents and files end up in a folder called `responsiveslides`. Then put that folder into the `/_add-ons/` folder. That's it.

## How To Use
First, put `{{ responsiveslides:head }}` wherever you prefer to load your CSS and Javascript files.

Second, set your parameters. The `name` is required since it is a unique identifier.

For example: `{{ responsiveslides name="unique_slideshow" auto="true" maxwidth="800"}}`

Third, create an unordered list of your images with `rslides` as a class. Add a class with the same unique identifier as the `name` parameter. Here's an example of what you can do.

    <ul class="rslides unique_slideshow">
        <li>
            <a href="http://www.flickr.com"><img src="img/example1.jpg"></a> <!-- Image that links to Flickr -->
            <p>What is love? Baby don't hurt me. Come on.</p> <!-- A caption! -->
        </li>	
        <li>
            <img src="img/example2.jpg">
            <p>Whoop, there it is!</p>
        </li>
    </ul>

Check out the [Responsive Slides](http://responsiveslides.com/) documentation for parameter information, as well as other ways to populate slideshows via various demos.

* Here's [some slideshow demos](http://responsiveslides.com/themes/themes.html). 
* Here's [a demo with captions](http://responsiveslides.com/with-captions/themes.html). 


### DISCLAIMER
There is no warranty for this plugin. I work on this during my free time.

### Changelog
- **v0.0.1:** Bare minimum. Embed slideshows into posts, pages, and templates.