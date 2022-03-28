fetch('https://jsonplaceholder.typicode.com/users%27)
  .then(response => response.json())
  .then(data => console.log(data))
.then(function(posts){
    var htmls = posts.map(funtion(post){
        return <tr>
<td>${post.id}</td><td>${post.name}</td><td>${post.username}</td><td>${post.email}</td><td>${post.email}</td><td>${post.id}</td></tr>;
    });
    var html = htmls.join('');
    document.getElementById('').innerHTML = html;
});
