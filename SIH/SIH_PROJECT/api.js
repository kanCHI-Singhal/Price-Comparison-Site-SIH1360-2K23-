const API_URL = 'https://fakestoreapi.com/products';
const API_KEY = 'openProduct_Price_history';

// Function to fetch API data
async function fetchData() {
  try {
    const response = await fetch(`${API_URL}?apiKey=${API_KEY}`);
    
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const data = await response.json();
    console.log('API Data:', data);
    // Process the data as needed
  } catch (error) {
    console.error('Error fetching data:', error.message);
  }
}

// Call the function to fetch data
fetchData();
