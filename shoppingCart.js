let cart = JSON.parse(localStorage.getItem('dictionary') ?? []) || [];
button = document.getElementById('cartInput');
cartContent = document.getElementById('cartContent');

function updateList() {
    //Einkaufswagen wird geupdated
}

// button.onclick = () =>{

//     console.log("test");
//     cartContent.innerHTML += `
//         <tr>
//                     <th scope="row">1</th>
//                     <td>test</td>
//                     <td>Otto</td>
//                     <td>@mdo</td>
//                   </tr>
//     `;
// }

document.addEventListener('click', test);

function test(event){
    console.log('hallloodj' + event.target.id)
        cartContent.innerHTML += `
        <tr>
                    <th scope="row">1</th>
                    <td>test</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
    `;
}

