function makeArray(n) {
this.length = n;
for (var i=1; i<=n; i++) {
this[i] = ""; 
}
return this;
}
var i;
function imagealeatoire() {
i = Math.floor(3 * Math.random() + 1);
return image[i];
}
image = new makeArray(3);
image[1]="imagenes/diaz.jpg";
image[2]="image_2.jpg";
image[3]="image_3.jpg";