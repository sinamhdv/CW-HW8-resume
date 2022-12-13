function check_required(form)
{
	var inps = document.getElementsByClassName("required-input");
	for (var i = 0; i < inps.length; i++)
	{
		if (inps.item(i).value == "")
		{
			return false;
		}
	}
	return true;
}

function validate(form)
{
	if (!check_required(form))
	{
		alert("Please fill out all required fields.");
		return false;
	}
	if (confirm("Are you sure the information is correct?"))
	{
		alert("Your message has successfully been sent!");
		return true;
	}
	return false;
}