
    const button = document.querySelector("button")
    button.onclick = () => {
        const input = document.querySelector("input").value
        const user = localStorage.setItem("Login", input)
        const output = localStorage.getItem("Login")
        console.log(output);
    }

    let result = document.getElementById("resultElement");
    console.log(result);
    result.innerText = localStorage.getItem("Login");

