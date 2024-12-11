function setIngredientsList() {
    let multiplier = +document.getElementById('ingredients-amount').value;
    let ingredientsList = document.querySelectorAll('[ingredients_text]');
    for (let index = 0; index < ingredientsList.length; index++) {
        const element = ingredientsList[index];
        const amount = element.getAttribute('ingredients_amount');
        const text = element.getAttribute('ingredients_text');
        element.innerHTML = `${amount == null ? '' : amount * multiplier}${text}`;
    }
}


function calcIngredients(event) {
    event.preventDefault();
    setIngredientsList();
}