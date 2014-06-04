/**
 * 
 */
self.setInterval("displayentry()",3000);
//var category = document.getElementsByName("category");
//var category = new arrary();
//var url;

function checkstatechange()
{
	displayentry();
}

function get_categorye_list()
{
	var selected_category = new Array();
	var category_list = document.getElementsByName("category");
	for(var i=0, length=category_list.length; i<length; i++)
	{
		if(category_list[i].checked == true)
			selected_category.push(category_list[i].value);
	}
	
	return selected_category;
}

function get_url(category)
{
	var url = "displayentry.php";
	var selected_category = category;
	
	if(selected_category.length>0)
	{
		url = url + "?category=";
		url = url + selected_category[0];
		for(var i=1, length=selected_category.length; i<length; i++)
		{
			url = url + "_" + selected_category[i];
		}
	}
	
	return url;
	
}

function displayentry()
{
	var xmlhttp = getxmlhttpobject();
/*	if (category.length==0)
		url = "displayentry.php";
	else
		url = "displayentry.php?category=" + category[0].value;*/
	//url = "displayentry.php?category=" + "物理";
	xmlhttp.onreadystatechange=function(){ stateChanged(xmlhttp); };
	var category = get_categorye_list();
	var url = encodeURI(get_url(category));
	xmlhttp.open("GET", url, true);
	xmlhttp.setRequestHeader("If-Modified-Since","0");  //disable IE to use cache so the entry change can display
	xmlhttp.send(null);
}

function stateChanged(object)
{
	var xmlhttp = object;
	if( xmlhttp.readyState == 4 && xmlhttp.status == 200 )
	{
		document.getElementById("entry").innerHTML = xmlhttp.responseText;
	}
}

function getxmlhttpobject()
{
	var xmlhttp = null;

	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlhttp = new XMLHttpRequest();
	}
	catch(error)
	{
		try
		{
			// IE
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");		
		}
		catch(error)
		{
			try
			{
				// IE 5.5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(error)
			{
				alert("Your browser is too old, please upgrade it");
				return false;
			}
		}
	}
	
	return xmlhttp;
}