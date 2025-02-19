const habitInput = document.getElementById('habitInput');
const habitList = document.getElementById('habitList');

let habits = JSON.parse(localStorage.getItem('habits')) || [];

function renderHabits() {
    habitList.innerHTML = '';
    habits.forEach((habit, index) => {
        const li = document.createElement('li');
        li.innerHTML = `
            <span ${habit.completed ? 'style="text-decoration: line-through;"' : ''}>${habit.name}</span>
            <button class="complete" onclick="toggleComplete(${index})">${habit.completed ? 'Completado' : 'Marcar como completado'}</button>
            <button onclick="removeHabit(${index})">Eliminar</button>
        `;
        habitList.appendChild(li);
    });
}

function addHabit() {
    const habitName = habitInput.value.trim();
    if (habitName) {
        habits.push({ name: habitName, completed: false });
        localStorage.setItem('habits', JSON.stringify(habits));
        habitInput.value = '';
        renderHabits();
    }
}

function toggleComplete(index) {
    habits[index].completed = !habits[index].completed;
    localStorage.setItem('habits', JSON.stringify(habits));
    renderHabits();
}

function removeHabit(index) {
    habits.splice(index, 1);
    localStorage.setItem('habits', JSON.stringify(habits));
    renderHabits();
}

// Inicializa la lista de hábitos
renderHabits();
