async function handleTaskRegister() {

    let name = document.querySelector(".name").value
    let Description = document.querySelector(".Description").value
    let Date = document.querySelector(".Date").value



    let task = {

        name: name,
        Description: Description,
        Date: Date,
    }

    let params = {

        method: "POST",

        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },


        body: JSON.stringify(task),
    };

    fetch("./TaskRegister.php", params)
        .then((res) => res.text())
        .then((data) => {
            handleFetchResponse(data)
        }).catch((e) => {
            console.log(e)
        });
}

