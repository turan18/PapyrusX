function denyInvitation(e){
    const values = e.target.parentNode.parentNode.className.split(" ");
    console.log(values);
    const course_id = values[3];
    const instructor_id = values[4];

    fetch("invitation/remove", { method:"POST",body: JSON.stringify({course_id,instructor_id})}
    ).then(data=>data.json()).then(data => console.log(data))
}