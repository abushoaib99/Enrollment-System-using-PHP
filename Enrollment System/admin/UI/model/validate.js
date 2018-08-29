
function validate()
{  var regex = /[^a-z|^A-Z|^\s]/;
   if(document.StudentRegistration.SN.value.match(regex))
   {
	   alert( "Name must be in alphabets only!" );
	   document.StudentRegistration.SN.focus();
	   return false;
   }
   if(document.StudentRegistration.SN.value.length>30)
   {
	   alert( "Name must be Less than 30 character!" );
	   document.StudentRegistration.SN.focus();
	   return false;
   }
   if(document.StudentRegistration.FN.value.match(regex))
   {
	   alert( "Name must be in alphabets only!" );
	   document.StudentRegistration.FN.focus();
	   return false;
   }
   if(document.StudentRegistration.FN.value.length>30)
   {
	   alert( "Name must be Less than 30 character!" );
	   document.StudentRegistration.FN.focus();
	   return false;
   }
   if(document.StudentRegistration.MN.value.match(regex))
   {
	   alert( "Name must be in alphabets only!" );
	   document.StudentRegistration.MN.focus();
	   return false;
   }
   if(document.StudentRegistration.MN.value.length>30)
   {
	   alert( "Name must be Less than 30 character!" );
	   document.StudentRegistration.MN.focus();
	   return false;
   }
   if( document.StudentRegistration.presentadd_district.value == "" )
   {
     alert( "Please provide your District of Present Address!" );
	 document.StudentRegistration.presentadd_district.focus();
    
     return false;
   } 
   
   if( document.StudentRegistration.presentadd_upzila.value == "" )
   {
     alert( "Please provide your Upzila of Present Address!" );
	 document.StudentRegistration.presentadd_upzila.focus();
     return false;
   }
   
   if( document.StudentRegistration.permanentadd_district.value == "" )
   {
     alert( "Please provide your District of Permanent Address!" );
	 document.StudentRegistration.permanentadd_district.focus();
     return false;
   } 
   
   if( document.StudentRegistration.permanentadd_upzila.value == "" )
   {
     alert( "Please provide your Upzila of Permanent Address!" );
	 document.StudentRegistration.permanentadd_upzila.focus();
     return false;
   }
   
   if( document.StudentRegistration.dob.value == "" )
   {
     alert( "Please provide your Date of Birth!" );
     document.StudentRegistration.dob.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.dept.value == "-1" )
   {
     alert( "Please provide your Department!" );
	 document.StudentRegistration.dept.focus();
     return false;
   }  
   
   if( document.StudentRegistration.h_year.value == "-1" )
   {
     alert( "Please provide your HSC Session Year!" );
	 document.StudentRegistration.h_year.focus();
     return false;
   }
   
   if( document.StudentRegistration.HSC_BOARD.value == "-1" )
   {
     alert( "Please provide your HSC Board Year!" );
    document.StudentRegistration.HSC_BOARD.focus();
     return false;
   }
   
   if( document.StudentRegistration.s_year.value == "-1" )
   {
     alert( "Please provide your SSC Passing!" );
	 document.StudentRegistration.s_year.focus();
     return false;
   }
   
   if( document.StudentRegistration.SSC_BOARD.value == "-1" )
   {
     alert( "Please provide your SSC Board!" );
	 document.StudentRegistration.SSC_BOARD.focus();
     return false;
   }
   if( isNaN( document.StudentRegistration.h_gpa.value) )
   {
     alert( "GPA must be in Numeric only !" );
	 document.StudentRegistration.h_gpa.focus();
     return false;
   }
   if(document.StudentRegistration.h_gpa.value>5 || document.StudentRegistration.h_gpa.value<2.50)
   {
     alert( "HSC GPA must be Minimum 2.50 or Maximum 5.00 !" );
	 document.StudentRegistration.h_gpa.focus();
     return false;
   } 
   if(isNaN( document.StudentRegistration.s_gpa.value))
   {
     alert( "GPA must be in Numeric only !!" );
	 document.StudentRegistration.s_gpa.focus();
     return false;
   }  
   if(document.StudentRegistration.s_gpa.value>5 || document.StudentRegistration.s_gpa.value<2.50)
   {
     alert( "SSC GPA must be Minimum 2.50 or Maximum 5.00 !" );
	 document.StudentRegistration.s_gpa.focus();
     return false;
   } 
   
   var hsc_year = document.StudentRegistration.h_year.value;
   var ssc_year = document.StudentRegistration.s_year.value;
   if(Math.abs(hsc_year-ssc_year)<2 || Math.abs(hsc_year-ssc_year)>3)
   {
		alert( "Please provide valid SSC and HSC Passing Year!." );
		return false;
   }
   
   if(document.StudentRegistration.phone.value == "" || isNaN( document.StudentRegistration.phone.value) || document.StudentRegistration.phone.value.length != 11 || document.StudentRegistration.phone.value.charAt(0)!=0 || document.StudentRegistration.phone.value.charAt(1)!=1 || (document.StudentRegistration.phone.value.charAt(2)!=5 && document.StudentRegistration.phone.value.charAt(2)!=6 && document.StudentRegistration.phone.value.charAt(2)!=7 && document.StudentRegistration.phone.value.charAt(2)!=8 && document.StudentRegistration.phone.value.charAt(2)!=9))
   {
     alert( "Please provide a valid BD Mobile No in the format 123." );
     document.StudentRegistration.phone.focus() ;
     return false;
   }
   
	
   return true;
}