document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const resultDiv = document.getElementById('result');
    const addSection = document.getElementById('addSection');
    const addButton = document.getElementById('addButton');

    // Fetch and display results when the search button is clicked
    searchButton.addEventListener('click', () => {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            fetch(`index.php?search=${encodeURIComponent(searchTerm)}`)
                .then(response => response.json())
                .then(data => {
                    resultDiv.innerHTML = '';
                    if (data.length > 0) {
                        addSection.style.display = 'none';
                        data.forEach(trans => {
                            const transDiv = document.createElement('div');
                            transDiv.className = 'translation';
                            transDiv.style.backgroundColor = 'royalblue';
                            transDiv.style.color = 'white';
                            transDiv.innerHTML = `
                                <p>English: ${trans.english}</p>
                                <p>Romanized Nepali: ${trans.romanized_nepali}</p>
                                <p>Unicode Nepali: ${trans.unicode_nepali}</p>
                            `;
                            resultDiv.appendChild(transDiv);
                        });
                    } else {
                        resultDiv.innerHTML = 'Translation not found.';
                        addSection.style.display = 'block';
                    }
                });
        } else {
            resultDiv.innerHTML = '';
            addSection.style.display = 'none';
        }
    });

    // Add new translation
    addButton.addEventListener('click', () => {
        const englishInput = document.getElementById('englishInput').value.trim();
        const romanizedNepaliInput = document.getElementById('romanizedNepaliInput').value.trim();
        const unicodeInput = document.getElementById('unicodeInput').value.trim();

        if (!englishInput || !romanizedNepaliInput || !unicodeInput) {
            alert('Please enter all fields.');
            return;
        }

        fetch('index.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                english: englishInput,
                romanized_nepali: romanizedNepaliInput,
                unicode_nepali: unicodeInput
            })
        })
        .then(response => response.json())
        .then(data => {
            alert('Translation added successfully!');
            location.reload(); // Refresh the page to show the new translation
        })
        .catch(error => console.error('Error:', error));
    });
});
