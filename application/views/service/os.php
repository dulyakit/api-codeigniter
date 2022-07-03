<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>os</title>
</head>

<style>
    .statusReady{
        background-color:green;
        color:white;
        padding:10px
    }
    .statusRunning{
        background-color:yellow;
        padding:10px
    }
</style>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <h4>CPU Time : <span id="cpuTime"></span></h4>
            </div>
            <div class="col-md-4">
                <h4>In Process : </h4>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Add Time
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
            </thead>
            <tbody id="taskAll">

            </tbody>

            <button class="btn btn-success" onclick="addTask()"> Add Task</button>
        </table>
    </div>
</body>

<script>
    let taskAll = document.getElementById('taskAll')
    let cpuTime = document.getElementById('cpuTime')

    var que = []

    var time = 0

    setInterval(() => {
        time ++
        cpuTime.innerHTML = `<span>${time}</span>`
    }, 1000);

    const showTask = () =>{
        taskAll.innerHTML = ''

        que.map((items, idx)=>{
            taskAll.innerHTML += `
            <tr key="idx" >
                <td>
                    ${idx + 1}
                </td>
                <td>
                    ${items.taskName}
                </td>
                <td>
                    ${items.addTime}
                </td>
                <td>
                    <span class="${items.status === "R" ? "statusReady" : "statusRunning"}">
                    ${items.status === "R" ? "Ready..." : "Running"}
                    </span> 
                </td>
            </tr>
            `
        })
    }

    const addTask = () => {
        que.push({
            taskName: 'Task '+que.length, 
            addTime: time, 
            status: 'R', 
        })

        showTask()
    }

</script>

</html>