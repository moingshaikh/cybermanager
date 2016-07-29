// JavaScript Document : Validation functions for all forms of Cyber Manager(v1.0), and expiry date validation function.

function ValidateAddCustForm()
{
    valid = true;

    if (document.add_customer.f_name.value == "" )
    {
        alert ( "Please enter your 'First Name'." );
		add_customer.f_name.focus();
        valid = false;
    }

	    else if (document.add_customer.l_name.value == "" )
    {
        alert ( "Please enter your 'Last Name'." );
		add_customer.l_name.focus();
        valid = false;
    }

	    else if (document.add_customer.street.value == "" )
    {
        alert ( "Please enter your 'Street Address'." );
		add_customer.street.focus();
        valid = false;
    }
	    else if (document.add_customer.city.value == "" )
    {
        alert ( "Please enter your 'City Name'." );
		add_customer.city.focus();
        valid = false;
    }
	    else if (document.add_customer.pincode.value == "" )
    {
        alert ( "Please enter your 'Area Pincode'." );
		add_customer.pincode.focus();
        valid = false;
    }
	    else if (document.add_customer.state.value == "" )
    {
        alert ( "Please enter your 'State's Name'." );
		add_customer.state.focus();
        valid = false;
    }
	    else if (document.add_customer.nation.value == "" )
    {
        alert ( "Please enter your 'Nation's Name'." );
		add_customer.nation.focus();
        valid = false;
    }
	    else if (document.add_customer.dob.value == "" )
    {
        alert ( "Please enter your 'Date of Birth'." );
		add_customer.dob.focus();
        valid = false;
    }
	    else if (document.add_customer.gender.value == "" )
    {
        alert ( "Please select your 'Gender'." );
		add_customer.gender.focus();
        valid = false;
    }
	    else if (document.add_customer.contact_no.value == "" )
    {
        alert ( "Please enter your 'Contact Number'." );
		add_customer.contact_no.focus();
        valid = false;
    }
	    else if (document.add_customer.email_id.value == "" )
    {
        alert ( "Please enter your 'Email ID'." );
		add_customer.email_id.focus();
        valid = false;
    }
	    else if (document.add_customer.id_proof.value == "" )
    {
        alert ( "Please Select 'ID Proof'." );
		add_customer.id_proof.focus();
        valid = false;
    }
	    else if (document.add_customer.id_proof_reg_no.value == "" )
    {
        alert ( "Please enter 'ID Proof Number'." );
		add_customer.id_proof_reg_no.focus();
        valid = false;
    }
	    else if (document.add_customer.id_expiry_date.value == "" )
    {
        alert ( "Please enter 'ID Proof Expiry Date'." );
		add_customer.id_expiry_date.focus();
        valid = false;
    }
	    else if (document.add_customer.id_proof_image.value == "" )
    {
        alert ( "Please upload your 'ID Proof Image from Computer'." );
		add_customer.id_proof_image.focus();
        valid = false;
    }


    return valid;
}
/*
// function to validate pincode
function checknumber(){
var x=document.add_customer.pincode.value
var anum=/(^\d+$)|(^\d+\.\d+$)/
if (anum.test(x))
testresult=true
else{
alert("Please enter numbers only!")
testresult=false
}
return (testresult)
}
//
function masterfunction()
{
	function ValidateAddCustForm ();
	function checknumber();	
}
// function to popup expiry date box for concerned id proof in add customer module/form...
*/
function getexpire(val)
{
	if(val=='DrivingLicense' || val=='Passport' || val=='CollegeCard')
	{
		document.getElementById('div_expire').style.display="block";
	}
	else
	{
		document.getElementById('div_expire').style.display="none";
	}
}
