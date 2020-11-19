var name= prompt("Welcome to my site. Please enter your name.");
   var d = new Date();
   var hour =d.getHours();
   function response(){
   
   if(hour >= 5 && hour <=11 ){
       alert("Good Morning "+ name + ", Thank you for reviwing my resume site.")
   }
   else if (hour >=12 && hour <=18) {
       alert("Good Afternoon "+ name + ", Thank you for reviwing my resume site.")
   }
   
   else {
      alert("Good evening "+ name + ", Thank you for reviwing my resume site.")
   }
}//End of function 

response();
// 