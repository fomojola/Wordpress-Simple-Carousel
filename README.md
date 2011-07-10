# WordPress Simple Carousel

A simple carousel implemented using a modified jQuery carousel library. Supports as many images as you wish: all images are expected to be the same size. Was initially setup to provide a carousel for mobile app screenshots.

## Usage

Like this:

   [simple_carousel id="screenshots" container="screenshots" img="/static/image1.png|/static/image2.png|/static/image3.png|/static/image4.png|/static/image5.png" width="275" height="532" class="alignleft" item="screenshots"]

### Attributes
- *id*: the id to be used for the carousel container <div>.
- *container*: the id base to be used for the carousel's inner container <div>.
- *img*: the list of images. Each image is a relative or absolute URL; multiple URLs are separated by a pipe character.
- *width*: the width of each image. All images are expected to be the same width.
- *height*: the height of each image. All images are expected to be the same height.
- *item*: a unique class that will be applied to all images and is used by the Javascript implementation to manipulate the images.
- *class*: a set of additional CSS classes that will be applied to all images.

