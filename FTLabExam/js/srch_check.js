function SearchId()
{
    var id = document.getElementById("id").value;
    
    if(id == "")
    {
        document.getElementById("err").innerHTML = "Enter ID PLEASE!";
        return false;
    }
}

function Update()
{
    
    var name = document.getElementById("name").value;
    var dept = document.getElementById("dept").value;
    var date = document.getElementById("date").value;
    var sal = document.getElementById("sal").value;
    
    if(name == "")
    {
        document.getElementById("err2").innerHTML = "Enter name PLEASE!";
        return false;
    }

    if(name <8)
    {
        document.getElementById("err2").innerHTML = "Name must be atleast 8 characters";
        return false;
    }

    if(dept == "")
    {
        document.getElementById("err2").innerHTML = "Enter Depratment PLEASE!";
        return false;
    }

    if(date == "")
    {
        document.getElementById("err2").innerHTML = "Enter Joining Date PLEASE!";
        return false;
    }

    if(sal == "")
    {
        document.getElementById("err2").innerHTML = "Enter Salary PLEASE!";
        return false;
    }
}