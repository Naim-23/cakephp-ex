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
    document.getElementById("title").style.background="crimson";
  }

  else if (document.getElementById("TextBox").value == "")
  {
    alert("You must fill in the text area!");
    event.preventDefault();
    document.getElementById("TextBox").style.background="crimson"
  }

  else {
    event.submit();
    document.getElementById("title").style.background="black";
    document.getElementById("TextBox").style.background="white";
  }

}
