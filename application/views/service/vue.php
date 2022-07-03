<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js" integrity="sha512-vFABRuf5oGUaztndx4KoAEUVQnOvAIFs59y4tO0DILGWhQiFnFHiR+ZJfxLDyJlXgeut9Z07Svuvm+1Jv89w5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>

<body>
    <div id="app" class="container">
        {{ message }}
        <h1>
            {{ title }}
        </h1>
        <li v-for="items in todos">
            {{ items.text }}
        </li>

        <h1 v-if="title == 'vue'">test</h1>
        <h1 v-else-if="title == 'vue1'">false</h1>
        <h1 v-else>not found</h1>

        <button v-on:click="getEm" class="btn btn-success">getData</button>

        <table v-if="employee.length > 0" class="table table-striped">
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
            <tbody v-for="(item, index) in employee">
                <tr>
                    <td>
                        {{index + 1}}
                    </td>
                    <td>
                        {{ item.fname +" "+ item.lname  }}
                    </td>
                    <td>
                        {{ item.salary }}
                    </td>
                    <td :style="item.sex == 'M' ? 'color:red' : 'color:green'">
                        {{ item.sex == "M" ? "Male" : "Female"}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            title: 'vue',
            todos: [{
                    text: 'Learn JavaScript'
                },
                {
                    text: 'Learn Vue'
                },
                {
                    text: 'Build something awesome'
                }
            ],
            employee: {},
        },
        methods: {
            getEm: async function() {
                let tempData = await axios.get('http://localhost:10001/api/service/get_employee')
                if (tempData?.data?.result?.length > 0) {
                    this.employee = tempData?.data?.result
                }
            }
        }
    })
</script>

</html>