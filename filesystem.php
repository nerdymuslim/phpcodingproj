<?php
// the easiest way to read files in php is to use the readfile() function .it displays the content of the text followed by the number of bytes in the text. There is a better way to read file with more options.
// $file = 'quotes.txt';

// //we use a function file_exists() function to check if a file exist
// if (file_exists($file)) {
//     //     //read file


//     //     // //copy file . to copy a file from one content to another we use copy() function. it takes two argumnent . the name of the file to be copied and the new name of file that will contain the content
//     // copy($file, 'ekiti.txt');

//     // //     // //get the real (absolute) path of the file 
//     // echo realpath($file) . '<br />';

//     // //     // //get filesize
//     // echo filesize($file) . '<br />';

//     //     // //rename file 
//     rename($file, 'text.txt');
//     echo readfile($file) . '<br />';
// } else {
//     echo "no file found";
// }
// // //make a directory
mkdir('quotes folder');
