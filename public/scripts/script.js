async function fetchData(url, delay) {
    return new Promise(resolve => {
        setTimeout(async () => {
            const options = {
                method: 'GET',
                headers: {
                    'X-RapidAPI-Key': '3b527c6083msh103afad78e61d2cp10fe65jsn45477683e4f5',
                    'X-RapidAPI-Host': 'low-carb-recipes.p.rapidapi.com'
                }
            };

            try {
                const response = await fetch(url, options);
                const result = await response.json();
                console.log("Fetched data:", result); // Dodaj logowanie danych pobranych z API
                resolve(result);
            } catch (error) {
                console.error(error);
                resolve(null);
            }
        }, delay);
    });
}


window.onload = function() {
    // Wywołanie funkcji do przetwarzania danych po załadowaniu strony
    processFetchedData();
};

async function processFetchedData() {
    try {
        const urls = [
            'https://low-carb-recipes.p.rapidapi.com/search?tags=breakfast&limit=20',
            'https://low-carb-recipes.p.rapidapi.com/search?tags=lunch&limit=20',
            'https://low-carb-recipes.p.rapidapi.com/search?tags=main-dishes&limit=20',
            'https://low-carb-recipes.p.rapidapi.com/search?tags=snacks&limit=20'
        ];

        const delayBetweenRequests = 2000; // Opóźnienie między każdym żądaniem (w milisekundach)

        for (let i = 0; i < urls.length; i++) {
            const fetchedData = await fetchData(urls[i], i * delayBetweenRequests);
            
            if (!Array.isArray(fetchedData)) {
                console.error("Fetched data is not an array:", fetchedData);
                continue;
            }

            const processedData = processData(fetchedData);
            // console.log("Processed Data: ", processedData);

            // Wysyłanie przetworzonych danych do serwera
            fetch("gluco", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(processedData)
            }).then(function (response) {
                return response.text();
            }).then(function (data) {
                console.log(data);
            });
        }
    } catch (error) {
        console.error('Error processing fetched data:', error);
    }
}

const categorizeRecipe = (tags) => {
    if (tags.includes('breakfast')) {
        return 'breakfast';
    } else if (tags.includes('lunch')) {
        return 'lunch';
    } else if (tags.includes('main-dishes')) {
        return 'dinner';
    } else if (tags.includes('snacks')) {
        return 'snacks';
    } else {
        return 'other';
    }
};

function processData(data) {
    return data.map(item => ({
        meal_name: item.name,
        description: item.description,
        prep_time: item.prepareTime.toString(), 
        cook_time: item.cookTime.toString(), 
        servings: item.servings,
        ingredients: item.ingredients.map(ing => `${ing.name}: ${ing.servingSize.grams}g`).join(', '),
        preparation: item.steps.join(' '),
        nutrition_values: {
            total_calories: item.nutrients.caloriesKCal.toString(),
            protein: item.nutrients.protein.toString(),
            fat: item.nutrients.fat.toString(),
            carbs: item.nutrients.totalCarbs.toString(),
            sugar: item.nutrients.sugar.toString(),
            fiber: item.nutrients.fiber.toString(),
            sodium: item.nutrients.sodium.toString(),
            potassium: item.nutrients.potassium.toString(),
            magnesium: item.nutrients.magnesium.toString(),
            calcium: item.nutrients.calcium.toString()
        },
        image: item.image,
        category: categorizeRecipe(item.tags)
    }));
}