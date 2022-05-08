const temp_invites = [];
const temp_students = [];
function search(e){
    const container = document.getElementById('all_students');
    const search = e.target.value;
    const all_students = Array.from(document.getElementsByClassName('students'));
    
    all_students.map((el) => {
        if(!el.innerText.toLowerCase().includes(search.toLowerCase()) && search != ""){
            temp_students.push(el)
            container.removeChild(el)
        }
    })
     if(search == ""){
        temp_students.map((el) => {
            container.appendChild(el)
        })
    }

}
function searchInvites(e){
    const container = document.getElementById('invite_students');
    const search = e.target.value;
    const all_students = Array.from(document.getElementsByClassName('inv_students'));
    all_students.map((el) => {
        console.log(search)
        if(!el.innerText.toLowerCase().includes(search.toLowerCase()) && search != ""){
            temp_invites.push(el)
            container.removeChild(el)
            // el.classList.add("invisible")
        }
    })
    if(search == ""){
        temp_invites.map((el) => {
            container.appendChild(el)
        })
    }

}


// function makeElement(id){
//     const li = document.createElement('li');
//     li.classList.add('students')
//     li.id = id;
//     const input = document.createElement('input')
//     input.type = "checkbox"
//     input.value = id
//     input.name = "students[]"
//     input.classList.add("addbutton")
//     li.appendChild(input)
//     return li;
// }