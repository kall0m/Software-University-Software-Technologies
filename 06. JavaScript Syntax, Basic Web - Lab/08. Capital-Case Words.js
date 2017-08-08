function extractCaps(stringArr) {
    console.log(stringArr.join().split(/\W+/).filter(w => w != '').filter(w => w === w.toUpperCase()).join(", "));
}

extractCaps(["We start by HTML, CSS, JavaScript, JSON and REST.",
    "Later we touch some PHP, MySQL and SQL.",
    "Later we play with C#, EF, SQL Server and ASP.NET MVC.",
    "Finally, we touch some Java, Hibernate and Spring.MVC."]);