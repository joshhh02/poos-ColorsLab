function formatColorName(color) {
  return color.trim().toLowerCase();
}

test("formats color name correctly", () => {
  expect(formatColorName("  Blue  ")).toBe("blue");
});
