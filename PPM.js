var index=0;
var images=[1,2,3,4,5,6,7,8,9];
function moveToNextSlide()
{
if (index >= images.length - 1)
{
index=-1; //basically says 1 = 1 - index
}
var img = document.getElementById("img");//looks for img id in the html which is the main slideshow image
index++;
var slideName="slideshow/img" + images[index] + ".png";//defines slideName with spelling out the image name in the folder with the help of the index variable
img.src=slideName; //makes the source of the image for the slide show the just defined slideName variable.

}
function moveToPreviousSlide()
{
if (index > images.length)
{
index=+1;
}
var img = document.getElementById("img");
index--;
var slideName="slideshow/img" + images[index] + ".png";
img.src=slideName;

}
function moveTo1Slide() //moves to index position 0 when the function is called
{
index = 0;//have to still use the index for the previous 2 functions to work with these ones
var img = document.getElementById("img");
var slideName="slideshow/img" + images[index] + ".jpg";
img.src=slideName;
}
function mouseOver() {
  document.getElementById("img").outline = "5px";
  document.getElementById("img").outline.color = "#2e75b6";
}