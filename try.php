<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Contact Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #111;
      color: #eee;
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #0d6efd;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: #222;
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #333;
    }
    th {
      background: #0d6efd;
      color: white;
    }
    tr:hover {
      background: #333;
    }
    .empty {
      text-align: center;
      margin-top: 50px;
      font-size: 1.1rem;
      color: #999;
    }
    button {
      background: #f44336;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 15px;
    }
    button:hover {
      background: #d32f2f;
    }
  </style>
</head>
<body>

  <h2>📋 Stored Contact Messages</h2>

  <table id="contactsTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody id="tableBody">
      <!-- Dynamic rows will be added here -->
    </tbody>
  </table>

  <p class="empty" id="noDataMessage">No contact records found.</p>

  <div style="text-align:center;">
    <button id="clearDataBtn">🗑️ Clear All Data</button>
  </div>

  <script>
    // LocalStorage se data fetch karna
    const tableBody = document.getElementById('tableBody');
    const noDataMessage = document.getElementById('noDataMessage');
    const contacts = JSON.parse(localStorage.getItem('contacts')) || [];

    if (contacts.length > 0) {
      noDataMessage.style.display = 'none';

      contacts.forEach((contact, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${index + 1}</td>
          <td>${contact.name}</td>
          <td>${contact.email}</td>
          <td>${contact.subject}</td>
          <td>${contact.message}</td>
        `;
        tableBody.appendChild(row);
      });
    } else {
      noDataMessage.style.display = 'block';
    }

    // Clear all data button
    document.getElementById('clearDataBtn').addEventListener('click', () => {
      if (confirm("⚠️ Are you sure you want to delete all records?")) {
        localStorage.removeItem('contacts');
        location.reload();
      }
    });
  </script>

</body>
</html>
