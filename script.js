const form = document.getElementById("todoForm");
const input = document.getElementById("todoInput");
const list = document.getElementById("todoList");

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const todo = input.value;

  const response = await fetch("db-insert.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ todo }),
  });

  const data = await response.json();

  if (data.success) {
    const li = document.createElement("li");
    li.textContent = todo;
    list.appendChild(li);
    input.value = "";
  }
});
