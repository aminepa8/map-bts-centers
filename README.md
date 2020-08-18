# map-bts-centers



    # map Screenshot!
    ![Map Screenshot](https://github.com/aminepa8/map-bts-centers/screeshot.png)
  - Url : https://bts-map.herokuapp.com/
  - click on the blue marker to check center info (pop-up style)
  - Drag and drop images (requires your Dropbox account be linked)


### Add Another Marker

How to add another Marker to the map:

* open the file data.php
* create a new php variable in the end of file (current last variable is $v33 so you can create another one name it $v34 , v signify ville which mean city)
* Example :
```php
$v34 = <<<EOT
 <h1>Errachidia</h1>
  <p>
    <strong>Adresse : </strong>Center Address 
    <br>
    <strong>Tel : </strong>Phone Number
    <br>
    <strong>Site web : </strong><a href = 'http://center-website.com'>Lien</a>
  <br>
  <strong>Filières : </strong>
  <ul>
    <li>Filiere-1</li>
    <li>Filiere-2</li>
    <li>Filiere-3</li>
  </ul> 
  </p>
EOT;
```
* add the new variable to the array named data
```php
$data ="[.....],[`$v34`,Latitude,Longitude]";
 $data ="[.....],[`$v34`,31.9180726,-4.4325189]";
```

* you can use this website https://www.coordonnees-gps.fr to get the Latitude and Longitude  values



