// Define the ticket data
const ticketData = {
  subject: "Example Ticket",
  description: "This is an example ticket created via HTTP request.",
  priority: "high",
};

// Create the HTTP request
fetch("https://api.example.com/tickets", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    // Add any other required headers
  },
  body: JSON.stringify(ticketData),
})
  .then(response => {
    if (response.ok) {
      // Request successful
      return response.json();
    } else {
      // Request failed
      throw new Error("Ticket creation failed.");
    }
  })
  .then(data => {
    // Ticket created successfully
    console.log("Ticket created:", data);
  })
  .catch(error => {
    // Error occurred
    console.error("Error creating ticket:", error);
  });
