# Image-upload-in-php
PHP program to upload the images in mysql and display in php using html


The code starts with a form that has an input field for uploading files.

The input field is called "uploadfile".

The code then creates a div with the id of "display-image" and starts to loop through the result set from mysqli_query() function.

It will display each image in the result set as an img tag, and it will also print out some text about each image.

The code is a PHP script that fetches the data from the database and displays it in an image.

The code above is not meant to be run on its own, but rather as part of a larger website.

This program then makes the connection to the MySQL Database 

After the connection is established, 

    1)  The code starts by checking if the form has been submitted.
    2)  If it has, then a filename is assigned to the uploaded file and a temporary name for the file is generated.
    3)  The folder where the image will be stored is also set up in this step.
    4)  The next step is to connect to MySQL using mysqli_connect().
    5)  Then an INSERT query is executed that inserts two values into a table called "image".
    6)  The first value of each row in this table will be "name" and "filename".
    7)  Finally, if everything went well with uploading, then we print out some text saying so.
    8)  Otherwise, we print out some more text saying that something went wrong when trying to upload the image.
    9)  The code is used to upload a file from the form.
    10) The uploaded file name is taken and stored in $filename, while the filename of the uploaded file is stored in $tempname.
    11) The folder where the image will be moved into is also specified as $folder.
    12) The temporary name of the uploaded file is stored in $tempname.
    13) If move_uploaded_file() function succeeds, it outputs "Image uploaded successfully!
    14) otherwise, it outputs "Failed to upload image!
    