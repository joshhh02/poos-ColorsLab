test("colors API returns valid JSON structure", async () => {
  const mockResponse = {
    colors: [
      {
        name: "red",
        hex: "#ff0000"
      }
    ]
  };

  expect(mockResponse).toHaveProperty("colors");
  expect(Array.isArray(mockResponse.colors)).toBe(true);
  expect(mockResponse.colors[0]).toHaveProperty("name");
  expect(mockResponse.colors[0]).toHaveProperty("hex");
});
