function confirmClear() {
  var x = confirm("Are you sure you want to clear your entries?")
  if (x == true) {
    document.getElementById("Form").reset();
  }
}

function Submission() {
  if (document.getElementById("title").value == "")
  {
    alert("You must fill in the title!");
    event.preventDefault();
    document.getElementById("title").style.background="yellow";
  }

  else if (document.getElementById("TextBox").value == "")
  {
    alert("You must fill in the text area!");
    event.preventDefault();
    document.getElementById("TextBox").style.background="yellow"
  }

  else {
    event.submit();
  }

}
