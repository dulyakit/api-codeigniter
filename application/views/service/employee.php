<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js" integrity="sha512-vFABRuf5oGUaztndx4KoAEUVQnOvAIFs59y4tO0DILGWhQiFnFHiR+ZJfxLDyJlXgeut9Z07Svuvm+1Jv89w5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <h4 class="mt-5 mb-3">Employee List</h4>
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
                        salary
                    </th>
                    <th>
                        sex
                    </th>
                </tr>
            </thead>
            <tbody id="tbEm">
            </tbody>
        </table>
        <button class="btn btn-success" onclick="getEmployee()">getData</button>
    </div>
</body>

<script>
    var employee_list = document.getElementById('tbEm')

    const getEmployee = async () => {
        axios.get('http://localhost:10001/api/service/get_employee')
            .then(function(response) {
                let emData = response?.data?.result
                if (emData.length > 0) {

                    employee_list.innerHTML = ''

                    emData.map((items, idx) => {
                        console.log(items);
                        employee_list.innerHTML += `
                            <tr key="idx" >
                                <td>
                                    ${idx + 1}
                                </td>
                                <td>
                                    ${items.fname} ${items.lname}
                                </td>
                                <td>
                                    ${items.salary}
                                </td>
                                <td>
                                    ${items.sex === "M" ? "Male" : "Female"}
                                </td>
                             </tr>
                    `
                    })
                }
            })
            .catch(function(error) {
                console.log(error);
            })
            .then(function() {});
    }

    console.log("number: ", 1);
    console.log("string: ", "1");

    const result = new Date().toLocaleDateString('th-TH', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    })

    console.log(result);
    console.log(moment().format('L'));
</script>

</html>