
function fileValidation()
{  
	var fileInput = document.getElementById('img');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
	
	if(fileInput.files[0].size <  1048576)  // validation according to file size
	{
		if(!allowedExtensions.exec(filePath))
		{
        alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        fileInput.value = '';
        return false;
		}
		else
		{
			//Image preview
			if (fileInput.files && fileInput.files[0]) 
			{
				var reader = new FileReader();
				reader.onload = function(e){
					document.getElementById('imagePreview').innerHTML = '<img width="148px" height="180px" src="'+e.target.result+'"/>';
					document.getElementById('imagePreview').style.opacity = "0.7";
				}
				reader.readAsDataURL(fileInput.files[0]);
			}
		}
	}
	
	if(fileInput.files[0].size > 1048576)  // validation according to file size
	{
		alert(fileInput.files[0].size/1024/1024+" MB is large! Please select less then 1MB file");
		fileInput.value = '';
		return false;
	}
	
    
   return true;
}